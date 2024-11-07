import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Route,Link,NavLink, Switch, Routes} from 'react-router-dom'
import Home from './Home';
import About from './About';
import Login from './Login';
import './App.css'
//Example for Router in React Js
function myfunction(){
   <Router>

      <Link to="/">index</Link>
      <br></br>
      <Link to="/Home">home</Link>
      <br></br>
      <Link to="/About">about</Link>
      <br></br>
      <Link to="/Login">login</Link>
      <br></br>
      <div>
         <h2>React Router Demo</h2>
         <Routes>
         <Route path="/" element={<Home/>}/>
         <Route path="/Home" element={<Home/>}/>
         <Route path="/About"element={<About/>}/>
         <Route path="/Login" element={<Login/>}/>
         </Routes>
      </div>
   </Router>
}

ReactDOM.render(<myfunction/> ,document.getElementById('root'));