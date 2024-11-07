import React from 'react';
import ReactDOM from 'react-dom';
/*import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';*/
//example for creating html elements using JSX
var Sara={
  color:'yellow',
  textAlign:'center'
  }

const myelement = <div style={Sara}>
  <h1>isysway technologies</h1>
  <p>hello welcome to react js</p>
  <h2>React one</h2>
  </div>
  ReactDOM.render(myelement,document.getElementById('root'));









// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
