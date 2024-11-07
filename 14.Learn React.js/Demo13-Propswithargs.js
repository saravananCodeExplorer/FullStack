 import React from 'react';
import ReactDOM from 'react-dom';
//Example for using props to pass parameters between classes in ReactJS

class Exampleforprops extends React.Component
{

  render()
  {

    return <h1>Props -Demo Learn Reactjs from {this.props.var}</h1>
  }
}
class Exampleforpropschild extends React.Component
{

  render()
  {
    const x='AngularJS';
    return <Exampleforprops var={x}></Exampleforprops>
  }

}
ReactDOM.render(<Exampleforpropschild />,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
