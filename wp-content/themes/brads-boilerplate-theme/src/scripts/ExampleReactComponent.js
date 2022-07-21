import React, { useState } from 'react';
import Carousel from '../components/Carousel';

function ExampleReactComponent() {
	const [clickCount, setClickCount] = useState(0);

	return (
		<>
			<div
				className="example-react-component"
				onClick={() => setClickCount((prev) => prev + 1)}
			>
				<h1>Hello from React!!!!!</h1>
				<p>You have clicked on this component {clickCount} times.</p>
			</div>
		</>
	);
}

export default ExampleReactComponent;
