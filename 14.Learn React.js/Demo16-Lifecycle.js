import React from 'react';
import ReactDOM from 'react-dom';
//Example for React JS Life cycle  in React JS
class ExampleLifecycle extends React.Component
{
  constructor()
  {
    super();
    this.state={myvalue:"isysway",address:"nallaiyah complex"}
  }
  componentWillMount()
  {
    alert("Im componentwillMont")
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
    <button type="button" onclick ={this.changevalue}>  exit </button>
   </div>
  
  }
  componentDidMount()
  {
    setTimeout( () =>{
      this.setState({myvalue:"Thanks"})},3000)
    }
    componentWillUpdate()
    {
      alert("Do you want an update");
    }
    componentDidUpdate()
    {
      document.getElementById("root").innerHTML="new update Successfully"+this.state.myvalue;
    }
    
  }


ReactDOM.render(<ExampleLifecycle />,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
