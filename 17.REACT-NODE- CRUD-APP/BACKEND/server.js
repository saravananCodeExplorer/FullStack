const express=require('express');
const mysql = require('mysql');
const cors = require('cors');

// step1
const app = express();
// step9
app.use(express.json());
app.use(cors());



// STEP4 connect mysql
const db  = mysql.createConnection({
host:"localhost",
user:'root',
password:'',
database:'company'
})

// step2

app.get('/',(req,res)=>{
    return res.json("From backend side");
})


// step5
// get data from database
app.get('/staf',(req,res)=>{
    const sql = "select * from staf";
    db.query(sql,(err,data)=>{
        if(err) return res.json("ERRor");

        return res.json(data);
    })
})

// step8
// insert the data from database
app.post('/create',(req,res)=>{
    const sql ="INSERT INTO staf(`name`,`age`,`address`,`salary`) VALUES (?)";
    const values =[
        req.body.name,
        req.body.age,
        req.body.address,
        req.body.salary
    ]

    db.query(sql,[values],(err,data)=>{
        if(err) return res.json("Error");

        return res.json(data);

    })

})

// step10 
// update qry
app.put('/update/:id',(req,res)=>{
const sql = "UPDATE staf SET  `name` = ?, `age` = ?, `address` = ?, `salary` = ? WHERE id = ?";
const values =[
    req.body.name,
    req.body.age,
    req.body.address,
    req.body.salary
]
const id = req.params.id;

db.query(sql,[...values,id],(err,data)=>{
    if(err) return res.json("Error");

    return res.json(data);

})

})

// Get Employee 
app.get('/view/:id', (req, res) => {


    const sql = "SELECT * FROM staf WHERE id = ?";
    const  id  = req.params.id;

    db.query(sql, [id], (err, data) => {
        if(err) return res.json("Error");

        return res.json(data);
    });
});




//step11
//delete qry
app.delete('/staf/:id',(req,res)=>{
    const sql ="DELETE from staf WHERE  id = ?";


    const id = req.params.id;

    db.query(sql,[id],(err,data)=>{
        if(err) return res.json("Error");

        return res.json(data);

    })

})




//step3
app.listen(8081,()=>{
    console.log("listening");
})