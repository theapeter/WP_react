import './styles/main.scss';
import Person from './scripts/Person';
import ExampleReactComponent from './scripts/ExampleReactComponent';
import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

// const person1 = new Person('Brad');
// ReactDOM.render(
// 	<ExampleReactComponent />,
// 	document.querySelector('#render-react-example-here')
// );

ReactDOM.render(<App />, document.getElementById('react-root'));
