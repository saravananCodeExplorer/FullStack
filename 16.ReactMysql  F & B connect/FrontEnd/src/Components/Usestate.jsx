import { useState } from "react";
import React from "react";


const State= ()=>{

    const[name,setName]=useState("Saravanan");

    const[visible,setVisible]=useState(false);
    const[count,setCount]=useState(0);
       
    const ClikedMe =()=>{
        setName( "Gowtham")
    }
    const Click = ()=>{
        setCount(count+5)
    }


    return(
        <>
        <h1>1.useState</h1> 
        
        <p>UseState is used to store the data or information about the components.</p>
        <button onClick={ClikedMe}>ClikeMe</button>
        <h1>{name}</h1>
        
        <button onDoubleClick={()=>setVisible(!visible)}>{visible ? "hideName":"showName"}</button>

        {visible &&
        <h2>{name}</h2>
        }<br></br><br></br>
          

        <h3>The count is:{count}</h3>
        
        <button onClick={Click}>Increment</button>
        <button onClick={()=>setCount(count-5)}>Decrement</button>
        </> 
    )
}
export default State;