const express = require('express');
const mysql = require('mysql');
const cors = require('cors');

// connect backend
// step1
const app= express();
app.use(cors())


// connect mysql
// step4
const db = mysql.createConnection({
    host:"localhost",
    user:'root',
    password :'',
    database:'company'
})

// step2
app.get('/',(re,res)=>{
    return res.json("From Backend Side");

})


// get data from database
// step5
app.get('/staf',(re,res)=>{ 
    const sql = "SELECT * FROM staf  ";
    db.query(sql,(err,data)=>{
        if(err) return res.json(err);

        return res.json(data); 
    })
})

// step3
 app.listen(8080,()=>{
    console.log("listening");
 })