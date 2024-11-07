import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Keys with function  Props in React Js
function ListKey(props)                                   // 3
{
const item=props.item;
const key=props.keys;                   // 4
return  (
   <li>  {item} </li>
);
}
function MyList(props) {
   const listItem = props.myvalue.map((listvalue) =>
   <ListKey keys={listvalue} item={listvalue} />
   );
   return(
      <div  key={listvalue}>
         
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