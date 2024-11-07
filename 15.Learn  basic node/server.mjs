//001
// console.log("welcome")

// console.log(global)

//002
  
// const os = require('os')

// import os from 'os'
// console.log(os.version())
// console.log(os.release())
// console.log(os.uptime())
// console.log(os.type())
// console.log(os.version())
// console.log(os.homedir())

//003
// const path = require('path')
// console.log(path.dirname(__filename))

// console.log(path.basename(__filename))

// console.log(path.extname(__filename))

// console.log(path.parse(__filename))

//004.1

// const math = require('./math')
// console.log(math.add(3,3))
// console.log(math.sub(5,5))
// console.log(math.mul(5,5))
// console.log(math.div(5,5))

// 004.2
// const {add,sub,mul,div}=require('./math')
// console.log(add(100,100))
// console.log(sub(100,100))
// console.log(mul(100,100))
// console.log(div(100,100))

//004.3
// console.log("hello frds")

// import { add, sub, mul, div } from './math.js';
// const { add, sub, mul, div } = require('./math.js');

// console.log(add(100,100))
// console.log(sub(100,100))
// console.log(mul(100,100))
// console.log(div(100,100))


//chapter2
// readfile
//005
// option1 print buffer

// import {readFile} from 'node:fs';

// readFile("./files/read.txt",(err,data)=>{
//   if(err) throw err;
//   console.log(data);
  
// })

// option2 
// convert toString()

// Asynchronously reads the entire contents of a file.

// import {readFile} from 'node:fs';
// readFile("./files/read.txt",(err,data)=>{
//   if(err) throw err;
//   console.log(data.toString().toUpperCase())
// })

// Option3
import {readFile} from 'node:fs';
readFile("./files/reads.txt",'utf8',(err,data)=>{
  if(err) throw err;
  console.log(data)
})

// exits on uncaught errors
process.on('uncaughtException',err=>{
  console.error(`There was an caught error:${err}`)
  process.exit(1)
})




