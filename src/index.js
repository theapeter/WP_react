import './styles/main.scss'
import Person from './scripts/Person'
import MainComponent from './scripts/MainComponent'
import React from 'react'
import ReactDOM from 'react-dom'

const person1 = new Person("Brad")
ReactDOM.render(<MainComponent />, document.querySelector("#render-react-example-here"))