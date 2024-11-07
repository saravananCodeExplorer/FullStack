import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';

//example for calling external CSS class,styles using JSX


const myelement = <div>
  
  <h1 className="mystyle1">isysway technologies {5+10}</h1>
  <p>hello woelcome to react js</p>
  <h2>React one</h2>
  </div>
  ReactDOM.render(myelement,document.getElementById('root'));









// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
