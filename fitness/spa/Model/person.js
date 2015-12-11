var mysql = require("mysql");

module.exports =  {
    blank: function(){ return {} },
    get: function(id, ret, searchType){
        var conn = GetConnection();
        var sql = 'SELECT * FROM FitnessTracker_User';
        if(id){
          switch (searchType) {
            case 'facebook':
              sql += " WHERE P.fbid = " + id;
              break;
            
            default:
              sql += " WHERE P.id = " + id;
          }
          
        }
        conn.query(sql, function(err,rows){
          ret(err,rows);
          conn.end();
        });        
    },
    delete: function(id, ret){
        var conn = GetConnection();
        conn.query("DELETE FROM FitnessTracker_User WHERE id = " + id, function(err,rows){
          ret(err);
          conn.end();
        });        
    },
    save: function(row, ret){
        var sql;
        var conn = GetConnection();
        
        
        if (row.id) {
				  sql = " Update FitnessTracker_User "
							+ " Set name=?, dob=?, fbid=? "
						  + " WHERE id = ? ";
			  }else{
				  sql = "INSERT INTO FitnessTracker_User "
						  + " (name, dob, created_at, fbid) "
						  + "VALUES (?, ?, Now(), ?, ? ) ";				
			  }

        conn.query(sql, [row.name, row.dob, row.fbid, row.id],function(err,data){
          if(!err && !row.id){
            row.id = data.insertId;
          }
          ret(err, row);
          conn.end();
        });        
    },
    validate: function(row){
      var errors = {};
      
      if(!row.name) errors.Name = "is required"; 
      
      return errors.length ? errors : false;
    }
};  

function GetConnection(){
        var conn = mysql.createConnection({
          host: "localhost",
          user: "Kevin",
          password: "admin06",
          database: "c9"
        });
    return conn;
}