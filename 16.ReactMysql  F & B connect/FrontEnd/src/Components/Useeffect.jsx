// import { useEffect, useState } from "react";
// import React from "react";
// export default function Effect() {
//     const [data, setData] = useState(null); // Initialize state with null

//     useEffect(() => {
//         // Define an async function inside useEffect
//         const fetchData = async () => {
//             try {
//                 const response = await fetch('https://fakestoreapi.com/products/1');
//                 const result = await response.json();
//                 setData(result);
//             } catch (err) {
//                 console.log(err);
//             }
//         };

//         fetchData(); // Call the async function
//     }, []);

//     return (
//         <>
//             <h1>2.useEffect</h1>
//             {/* Display data if it exists */}
//             {data ? (
//                 <div>
//                     <h2>{data.title}</h2>
//                     <p>{data.description}</p>
//                     <p>Price: ${data.price}</p>
//                     <img src={data.image} alt={data.title} style={{ maxWidth: '200px' }} />
//                 </div>
//             ) : (
//                 <p>Loading...</p>
//             )}
//         </>
//     );
// }
