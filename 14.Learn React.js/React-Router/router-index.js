import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Route,Link,NavLink, Switch, Routes, MemoryRouter, BrowserRouter} from 'react-router-dom';
import Home from './Home';
import About from './About';
import Joinus from './Joinus'; 
import './App.css'
//Example for Router in React Js
const routing = (
   
  <Router>
       <div>
       <Link to="/">App</Link>
      <br></br>
      <Link to="/home">Home</Link>
      <br></br>
      <Link to="/about">About</Link>
      <br></br>
      <Link to="/login">Join</Link>
      <br></br>
         {/* <h2>React Router Demo</h2> */}
         <Routes>
         <Route exact path="/Home" element={<Home/>} />
         <Route path="/About" element={<About/>} />
         <Route path="/Joinus" element={<Joinus/>} />
         </Routes>
      </div>
   </Router>
)
ReactDOM.render(routing ,document.getElementById('root'));

