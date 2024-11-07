import React from 'react';
import ReactDOM from 'react-dom';
//Example for using dynamic state change State in React JS
class Exampleforstate extends React.Component
{
  constructor()
  {
    super();
    this.state={myvalue:"isysway",address:"nallaiyah complex"}
  }
  changevalue = () =>
  {
   this.setState({myvalue:"hello icad"});
  }
  render()
  {
    return<div>
    <h1>{this.state.myvalue} {this.state.address}</h1>
    <br/>
    <button type="button" onClick ={this.changevalue}>  exit </button>
   </div>
  
  }
}

ReactDOM.render(<Exampleforstate />,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
