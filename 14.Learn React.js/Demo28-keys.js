import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Keys with function  Props in React Js
function Menubar(props)                                   // 3
{
const contents=props.data.map((show) =>                   // 4
   <div key={show.id}>
   <h2> {show.id} : {show.title} : {show.content}</h2>
   </div>
);
   return  (
      <div>
         {contents}
      </div>
   );
}
const myvalue= [                                            // 1
   {id: 1, title: 'first',content: 'welcome to isysway'},
   {id: 2,title:'Second',content:'Learn Rect Js'},
];
ReactDOM.render                                              // 2
(
<Menubar data={myvalue}></Menubar>,
document.getElementById('root')
);
