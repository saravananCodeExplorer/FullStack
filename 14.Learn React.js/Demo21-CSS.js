import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'

//Example for inline CSS in React Js
class Reactstyle extends React.Component
{
render()
{
    const mystyle=
    {
      color:"blue",
      fontfamily:"Arial"
    };
    return (
        <div>
        <h1 style={{color:"red",textAlign:"center"}}>Hello isysway</h1>
        <h2 style={mystyle}> Welcome</h2>
        <h3 className={Reactstyle}>thanks</h3>
        </div>
    )
}
}
ReactDOM.render(<Reactstyle/>,document.getElementById('root'));