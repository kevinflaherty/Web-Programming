var mysql = require("mysql");

module.exports =  {
    GetConnection: function(){
        var conn = mysql.createConnection({
          host: "localhost",
          user: "kevin",
          password: "admin06",
          database: "c9"
        });
    return conn;
}
};