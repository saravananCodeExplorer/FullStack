import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for List with function in React Js
function Menubar()
{
const newlist=[1,2,3,4,5,"hii","bye"]
const r1=newlist.map((listvalues) => {
   return <li>{listvalues}</li>
});
return <ul>{r1}</ul>
}
ReactDOM.render(<Menubar ></Menubar>,document.getElementById('root'));