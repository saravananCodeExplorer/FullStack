// src/ParentComponent.js
import React from 'react';
import ChildComponent2 from './Child2.js';

function ParentComponent2() {
  // Array of objects to be passed as props
  const items = [
    { id: 1, name: 'Saro', description: 'Software Trainer' },
    { id: 2, name: 'Kadal', description: 'Software Developer' },
    { id: 3, name: 'Rajsh', description: 'DevAps Developer' },
  ];

  return (
    <div>
      <h1>Parent Component</h1>
      <ChildComponent2 items={items} />
    </div>
  );
}

export default ParentComponent2;
