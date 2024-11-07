import React from 'react';
import ReactDOM from 'react-dom';
import Myclass from './App';
import './index.css';
//example for creating Classe in App.js and call in index.js

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



// Code to write in App.js
import logo from './logo.svg';
import './App.css';
import React from 'react';
import ReactDOM from 'react-dom';
class Myclass extends React.Component
{
        render()
      {
        return <h1>Welcome to Class Componenet in app.js</h1>
      }
}
export default Myclass;
