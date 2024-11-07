import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';

//example for creating Functions

function Func1()
{
   return <h1 className="mystyle1">isysway technologies -Function Demo{5+10}</h1>
}
function Sidebar()
{
   return <h3>Sidebar</h3>
}
function Navbar()
{
  return <h3>Navbar</h3>
}
function Mywebsite1()
{
  return <div>
    <Func1/>
    <Sidebar></Sidebar>
    <Navbar></Navbar>
  </div>
}
//ReactDOM.render(<Func1/>,document.getElementById('root'));
ReactDOM.render(<Mywebsite1/>,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
