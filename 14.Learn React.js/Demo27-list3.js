import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for List with function  Props in React Js
function Menubar(props)
{
const myvalue=props.myvalue1;
const r1=myvalue.map((listvalues) => {
   return <li>{listvalues}</li>
});
return <ul>{r1}</ul>
}
const myvalue=[1,2,3,4];
ReactDOM.render(<Menubar myvalue1={myvalue}></Menubar>,document.getElementById('root'));