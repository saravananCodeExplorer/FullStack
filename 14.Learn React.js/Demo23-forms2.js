import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Form2 in React Js
class Reactform extends React.Component
{
    constructor()
    {
        super();
        this.state={username:"",age:null,errmsg:""};
    }
uservalue = (event) =>
{
    let n=event.target.name;
    let v=event.target.value;
    let err="";
    if (n==="age")
    {
       if (v!="" && !Number(v))
       {
           err= <strong>invalid age must be a number</strong>
       }
    }
    this.setState({errmsg:err});
    this.setState({[n]:v});
}
render()
{
     return (
        <form>
        <h1>Hello {this.state.username}</h1>
        <h1>Age {this.state.age}</h1>
        Enter your name : <input type="text" name="username" onChange={this.userValue}/>
        Enter your age : <input type="text" name="age" onChange={this.userValue}/> {this.state.errmsg}
        </form>
    )
}
}
ReactDOM.render(<Reactform/>,document.getElementById('root'));