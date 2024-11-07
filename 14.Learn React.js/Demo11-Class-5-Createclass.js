import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';

//example for creating Classes
class Myclass extends React.Component
{
        render()
      {
        return <h1>Welcome to Class Componenet</h1>
      }
}
//example for creating Classes
class Myclass2 extends React.Component
{
render()
{
  return  <div>
   <Myclass/>
    <h1>Welcome to Class2</h1>
   </div>
}
}
ReactDOM.render(<Myclass2/>,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
