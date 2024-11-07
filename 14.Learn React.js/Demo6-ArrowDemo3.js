import React from 'react';
import ReactDOM from 'react-dom';
/*import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';*/
//example for var and let 
var f = () =>

{
 var a=5;
 if(a===5)
 {
  //  var a=10;
  let a=10;
document.getElementById('root').innerHTML=a;
 }
 document.getElementById('root').innerHTML=a;
}
f();