// src/props/Parent.js
import React from 'react';
import ChildComponent from './Child.js';

function ParentComponent() {
  const parentData = 'Hello I am saravanan!';

  return (
    <div>
      <h1>{parentData}</h1>
      <ChildComponent Data={parentData} />
    </div>
  );
}

export default ParentComponent;
