var g = require("../inc/global");
var userId = 1;

module.exports =  {
    blank: function(){ return {} },
    get: function(id, userId, ret){
        var conn = g.GetConnection();
        var sql = 'SELECT F.* FROM FitnessTracker_Meal F WHERE User_id = ' + userId;
        if(id){
          sql += " AND F.id = " + id;
        }
        conn.query(sql, function(err,rows){
          ret(err,rows);
          conn.end();
        });        
    },
    delete: function(id, ret){
        var conn = g.GetConnection();
        conn.query("DELETE FROM FitnessTracker_Meal WHERE id = " + id, function(err,rows){
          ret(err);
          conn.end();
        });        
    },
    save: function(row, ret){
        var sql;
        var conn = g.GetConnection();
        //  TODO Sanitize
        if (row.id) {
				  sql = " Update FitnessTracker_Meal "
							+ " Set `name`=?, `calories`=?, `fat`=?, `carbs`=?, `fiber`=?, `when`=?, `User_id`=? "
						  + " WHERE id = ? ";
			  }else{
				  sql = "INSERT INTO `FitnessTracker_Meal` (`created_at`, `name`, `calories`, `fat`, `carbs`, `fiber`, `when`, `User_id`)"
						  + "VALUES (NOW(), ?, ?, ?, ?, ?, ?, ?) ";				
			  }

        conn.query(sql, [row.name, row.calories, row.fat, row.carbs, row.fiber, row.when, row.User_id, row.id],function(err,data){
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

