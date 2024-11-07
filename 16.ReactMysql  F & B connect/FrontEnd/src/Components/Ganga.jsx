import React from "react";
import { useState } from "react";

const GangaComponent = ()=>{
    const[name,setName] = useState("Ganga");
    const[count,SetCount]=useState(0);


    const Cliked = ()=>{
        setName(name +"Danga");

    }
    return(
        <>
     
      <br /><br></br>  <button onClick={Cliked}>Cliked</button>
        <h1>hai {name}</h1>

        <button onClick={()=>SetCount(count+5)}>+</button>
        <p>The count value is:{count}</p>
        </>
    )

}
export default GangaComponent;