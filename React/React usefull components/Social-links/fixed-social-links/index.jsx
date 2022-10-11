import React from "react";
import { BsTwitter, BsInstagram } from "react-icons/bs";
import { FaFacebookF } from "react-icons/fa";
import "./SocialMedia.scss";
const SocialMedia = () => (
	<div className="app__social ">
		<div className=" flex__center">
			<BsTwitter />
		</div>
		<div className=" flex__center">
			<FaFacebookF />
		</div>
		<div className=" flex__center">
			<BsInstagram />
		</div>
	</div>
);

export default SocialMedia;
