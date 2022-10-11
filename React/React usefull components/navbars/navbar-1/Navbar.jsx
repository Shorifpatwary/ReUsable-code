import React, { useState } from "react";
import "./Navbar.scss";
import { HiMenuAlt4, HiX } from "react-icons/hi";
import { motion } from "framer-motion";

import "../../../src/App.scss";
import { images } from "../../constants";
import NavigationDots from "../../components/NavigationDots";
import SocialMedia from "../../components/SocialMedia";
const Navbar = () => {
	const [toggle, setToggle] = useState(false);
	const menuItems = [
		"home",
		"about",
		"work",
		"skills",
		"testimonial",
		"contact",
	];
	return (
		<>
			<nav className="app__navbar flex__center">
				<div className="app__navbar-logo flex__start">
					<img src={images.logo} alt="logo" />
				</div>
				<ul className="app__navbar-links flex__center">
					{menuItems.map((item) => (
						<li
							className="d__flex flex__center p-text"
							key={`link-${item}`}
						>
							{/* <div /> */}
							<a href={`#${item}`}>{item}</a>
						</li>
					))}
				</ul>

				<div className="app__navbar-menu flex__center">
					<HiMenuAlt4 onClick={() => setToggle(true)} />

					{toggle && (
						<motion.div
							whileInView={{ x: [300, 0] }}
							transition={{ duration: 0.85, ease: "easeOut" }}
						>
							<HiX onClick={() => setToggle(false)} />
							<ul className="flex__column-center">
								{menuItems.map((item) => (
									<li key={item}>
										<a
											href={`#${item}`}
											onClick={() => setToggle(false)}
										>
											{item}
										</a>
									</li>
								))}
							</ul>
						</motion.div>
					)}
				</div>
			</nav>
			<NavigationDots />
			<SocialMedia />
		</>
	);
};

export default Navbar;
