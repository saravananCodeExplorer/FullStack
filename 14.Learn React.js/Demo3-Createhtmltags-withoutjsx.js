import React from 'react';
import ReactDOM from 'react-dom';



//example for creating html elements withot using JSX


const myelement =React.createElement("h2",{},"isysway");
ReactDOM.render(myelement,document.getElementById('root')); 

















/*  ReactDOM.render(
   <React.StrictMode>
     <App />
   </React.StrictMode>,
   document.getElementById('root')
 ); */

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals();
