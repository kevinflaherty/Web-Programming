var g = require("../inc/global");
var userId = 1;

module.exports =  {
    blank: function(){ return {} },
    get: function(id, userId, ret){
        var conn = g.GetConnection();
        var sql = 'SELECT E.* P.name as PersonName FROM 2015Fall_Exercise_Done E '
                + '   Join FitnessTracker_User P ON E.User_id = P.id '
                + ' WHERE E.User_id = ' + userId;
        if(id){
          sql += " AND E.id = " + id;
        }
        conn.query(sql, function(err,rows){
          ret(err,rows);
          conn.end();
        });        
    },
    delete: function(id, ret){
        var conn = g.GetConnection();
        conn.query("DELETE FROM FitnessTracker_Exercise WHERE id = " + id, function(err,rows){
          ret(err);
          conn.end();
        });        
    },
    save: function(row, ret){
        var sql;
        var conn = g.GetConnection();
        //  TODO Sanitize
        if (row.id) {
				  sql = " Update FitnessTracker_Exercise "
							+ " Set `User_id`=?, `name`=?, `when`=?, `duration`=?, `intensity`=? "
						  + " WHERE id = ? ";
			  }else{
				  sql = "INSERT INTO `FitnessTracker_Exercise` (`created_at`, `User_id`, `name`, `when`, `duration`, `intensity`) "
						  + "VALUES (Now(), ?, ?, ?, ?, ?, ? ) ";				
			  }

        conn.query(sql, [ row.User_id, row.name, row.when, row.duration, row.intensity, row.id],function(err,data){
          if(!err && !row.id){
            row.id = data.insertId;
          }
          ret(err, row);
          conn.end();
        });        
    },
    validate: function(row){
      var errors = {};
      
      if(!row.Name) errors.Name = "is required"; 
      
      return errors.length ? errors : false;
    }
};  

