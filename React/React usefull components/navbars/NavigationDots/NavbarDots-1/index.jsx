import React from "react";
import "./NavigationDots.scss";
const NavigationDots = ({ items, active }) => {
	const NavigationItem = items
		? items
		: ["home", "about", "work", "skills", "testimonial", "contact"];

	return (
		<div className="app__navigation ">
			<ul id="pagination">
				{NavigationItem.map((item, index) => (
					<li>
						<a
							href={`#${item}`}
							className="app__navigation-dot"
							key={item + index}
							style={
								active === item
									? { backgroundColor: "yellow" }
									: {}
							}
						>
							<span>{item}</span>
						</a>
					</li>
				))}
			</ul>
		</div>
	);
};

export default NavigationDots;
