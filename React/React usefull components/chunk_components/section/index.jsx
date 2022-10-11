import React from "react";
import { motion } from "framer-motion";
import "./section.scss";

const Section = (props) => {
	return (
		<motion.div
			whileInView={{ y: [100, 50, 0], opacity: [0, 0, 1] }}
			transition={{ duration: 0.5 }}
			id={props?.name || ""}
			className={`section__wrapper flex__center ${
				props?.className || ""
			}`}
		>
			<div
				className={`section__row flex__column-center ${
					props?.rowClassName || ""
				}`}
			>
				{props?.children || ""}
			</div>
		</motion.div>
	);
};

export default Section;
