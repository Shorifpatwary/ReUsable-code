import { useCallback, useState } from "react";
// Usage
function App() {
	// Call the hook which returns, current value and the toggler function
	const [isTextChanged, setIsTextChanged] = useToggle();

	return (
		<button onClick={setIsTextChanged}>
			{isTextChanged ? "Toggled" : "Click to Toggle"}
		</button>
	);
}

/**
 * use Toggle hook
 * @param {boolean } initialState
 * @returns  state , toggle
 */
const useToggle = (initialState = false) => {
	// Initialize the state
	const [state, setState] = useState(initialState);

	// Define and memorize toggler function in case we pass down the component,
	// This function change the boolean value to it's opposite value
	const toggle = useCallback(() => setState((state) => !state), []);

	return [state, toggle];
};
export default useToggle;

/**
 *  for TYPESCRIPT
 */

// import { useCallback, useState } from 'react';
// // Usage
// function App() {
//     // Call the hook which returns, current value and the toggler function
//     const [isTextChanged, setIsTextChanged] = useToggle();

//     return (
//         <button onClick={setIsTextChanged}>{isTextChanged ? 'Toggled' : 'Click to Toggle'}</button>
//     );
// }
// // Hook
// // Parameter is the boolean, with default "false" value
// /**
//  * use Toggle hook
//  * @param {boolean } initialState
//  * @returns state , toggle
//  */
// const useToggle = (initialState = false) => {
//     // Initialize the state
//     const [state, setState] = useState(initialState);

//     // Define and memorize toggler function in case we pass down the component,
//     // This function change the boolean value to it's opposite value
//     const toggle = useCallback(() => setState(state => !state), []);

//     return [state, toggle]
// }
// export default useToggle;
