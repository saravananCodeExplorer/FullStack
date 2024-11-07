import React from 'react';
import ReactDOM from 'react-dom';
//Example for using State in React JS
class Exampleforstate extends React.Component
{
  constructor()
  {
    super();
    this.state={myvalue:"isysway",address:"nallaiyah complex"}
  }
  render()
  {

    return <h1>{this.state.myvalue} {this.state.address}</h1>
  }
}

ReactDOM.render(<Exampleforstate />,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
