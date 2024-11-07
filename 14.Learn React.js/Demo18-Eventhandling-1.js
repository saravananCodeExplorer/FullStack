import React from 'react';
import ReactDOM from 'react-dom';
//Example for event handling in React Js
class Eventbind extends React.Component
{
    constructor()
    {
        super()
        this.state={
            msg:"welcome"
        }
    }
    // clickEvent = () => 0
    // {
    //     this.setState({
    //         msg:"Thanks"
    //     }
    //     )
    // }
       clickEvent = () =>
       {
        this.setState({
            msg:"Thanks"
        }
        )
    }

render()
{
    return (
        <div>
            <h1>{this.state.msg}</h1>
            <button onClick={this.clickEvent}>Click</button>
        </div>
    )

}
}
ReactDOM.render(<Eventbind/>,document.getElementById('root'));








// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
// reportWebVitals(); 
