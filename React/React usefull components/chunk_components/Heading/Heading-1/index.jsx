import React from "react";
import "./heading-md.scss";

const HeadingMd = (props) => {
	return (
		<>
			<h2 className="heading__md">{props.children}</h2>
		</>
	);
};

export default HeadingMd;
