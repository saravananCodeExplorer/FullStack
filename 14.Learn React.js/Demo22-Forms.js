import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Form in React Js
class Reactform extends React.Component
{
    constructor()
    {
        super();
        this.state={username:""};
    }
uservalue = (event) =>
{
    this.setState({username:event.target.value})
}
render()
{
     return (
        <form>
        <h1>Hello {this.state.username}</h1>
        Enter your name : <input type="text" onChange={this.useralue}/>
        </form>
    )
}
}
ReactDOM.render(<Reactform/>,document.getElementById('root'));  1