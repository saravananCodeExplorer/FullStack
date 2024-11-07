import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Keys with function  Props in React Js
function ListKey(props)                                   // 3
{
const items=props.item;
const key1=props.keys;                   // 4
return  (
   <li key={key1}>  {items} </li>
);
}
function MyList(props) {
   const listItem = props.myvalue.map((listvalue,index) =>
   <ListKey keys={index} item={listvalue} />
   );
   return(
      <div>
         <h2>Correct  key Usage Example</h2>
         <ul> {listItem} </ul>
      </div>
   );
}
const mydata= [ 200,1000,5000,300];
ReactDOM.render                                              // 2
(
<MyList myvalue={mydata}/>,
document.getElementById('root')
);