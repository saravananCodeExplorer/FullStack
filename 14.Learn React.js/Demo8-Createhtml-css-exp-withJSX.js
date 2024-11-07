import React from 'react';
import ReactDOM from 'react-dom';
/*import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';*/
//example for creating html elements ,styles and expressions using JSX
var mystyle={
  color:'yellow',
  textAlign:'center'
  }

const myelement = <div >
  <h1 style={mystyle}>isysway technologies {5+10}</h1>
  <p>hello woelcome to react js</p>
  <h2>React one</h2>
  </div>
  ReactDOM.render(myelement,document.getElementById('root'));









// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
