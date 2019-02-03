/**
 * WordPress dependencies...
 */
const { Component } = wp.element;

class SocialIcons extends Component {
	render() {
		if ( 'facebook' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512">
					<path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" />
				</svg>
			);
		} else if ( 'twitter' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
				</svg> );
		} else if ( 'googleplus' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
					<path fill="currentColor" d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" />
				</svg>
			);
		} else if ( 'linkedin' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<path fill="currentColor" d="M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 32 53.8 32c29.7 0 53.8 24.1 53.8 53.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z" />
				</svg>
			);
		} else if ( 'pinterest' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
					<path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z" />
				</svg>
			);
		} else if ( 'tumblr' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
					<path fill="currentColor" d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z" />
				</svg>
			);
		} else if ( 'reddit' === this.props.icon ) {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path fill="currentColor" d="M440.3 203.5c-15 0-28.2 6.2-37.9 15.9-35.7-24.7-83.8-40.6-137.1-42.3L293 52.3l88.2 19.8c0 21.6 17.6 39.2 39.2 39.2 22 0 39.7-18.1 39.7-39.7s-17.6-39.7-39.7-39.7c-15.4 0-28.7 9.3-35.3 22l-97.4-21.6c-4.9-1.3-9.7 2.2-11 7.1L246.3 177c-52.9 2.2-100.5 18.1-136.3 42.8-9.7-10.1-23.4-16.3-38.4-16.3-55.6 0-73.8 74.6-22.9 100.1-1.8 7.9-2.6 16.3-2.6 24.7 0 83.8 94.4 151.7 210.3 151.7 116.4 0 210.8-67.9 210.8-151.7 0-8.4-.9-17.2-3.1-25.1 49.9-25.6 31.5-99.7-23.8-99.7zM129.4 308.9c0-22 17.6-39.7 39.7-39.7 21.6 0 39.2 17.6 39.2 39.7 0 21.6-17.6 39.2-39.2 39.2-22 .1-39.7-17.6-39.7-39.2zm214.3 93.5c-36.4 36.4-139.1 36.4-175.5 0-4-3.5-4-9.7 0-13.7 3.5-3.5 9.7-3.5 13.2 0 27.8 28.5 120 29 149 0 3.5-3.5 9.7-3.5 13.2 0 4.1 4 4.1 10.2.1 13.7zm-.8-54.2c-21.6 0-39.2-17.6-39.2-39.2 0-22 17.6-39.7 39.2-39.7 22 0 39.7 17.6 39.7 39.7-.1 21.5-17.7 39.2-39.7 39.2z" />
				</svg>
			);
		} else {
			return (
				<svg className="themeisle-toolbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path fill="currentColor" d="M208 88.286c0-10 6.286-21.714 17.715-21.714 11.142 0 17.714 11.714 17.714 21.714 0 10.285-6.572 21.714-17.714 21.714C214.286 110 208 98.571 208 88.286zm304 160c0 36.001-11.429 102.286-36.286 129.714-22.858 24.858-87.428 61.143-120.857 70.572l-1.143.286v32.571c0 16.286-12.572 30.571-29.143 30.571-10 0-19.429-5.714-24.572-14.286-5.427 8.572-14.856 14.286-24.856 14.286-10 0-19.429-5.714-24.858-14.286-5.142 8.572-14.571 14.286-24.57 14.286-10.286 0-19.429-5.714-24.858-14.286-5.143 8.572-14.571 14.286-24.571 14.286-18.857 0-29.429-15.714-29.429-32.857-16.286 12.285-35.715 19.428-56.571 19.428-22 0-43.429-8.285-60.286-22.857 10.285-.286 20.571-2.286 30.285-5.714-20.857-5.714-39.428-18.857-52-36.286 21.37 4.645 46.209 1.673 67.143-11.143-22-22-56.571-58.857-68.572-87.428C1.143 321.714 0 303.714 0 289.429c0-49.714 20.286-160 86.286-160 10.571 0 18.857 4.858 23.143 14.857a158.792 158.792 0 0 1 12-15.428c2-2.572 5.714-5.429 7.143-8.286 7.999-12.571 11.714-21.142 21.714-34C182.571 45.428 232 17.143 285.143 17.143c6 0 12 .285 17.714 1.143C313.714 6.571 328.857 0 344.572 0c14.571 0 29.714 6 40 16.286.857.858 1.428 2.286 1.428 3.428 0 3.714-10.285 13.429-12.857 16.286 4.286 1.429 15.714 6.858 15.714 12 0 2.857-2.857 5.143-4.571 7.143 31.429 27.714 49.429 67.143 56.286 108 4.286-5.143 10.285-8.572 17.143-8.572 10.571 0 20.857 7.144 28.571 14.001C507.143 187.143 512 221.714 512 248.286zM188 89.428c0 18.286 12.571 37.143 32.286 37.143 19.714 0 32.285-18.857 32.285-37.143 0-18-12.571-36.857-32.285-36.857-19.715 0-32.286 18.858-32.286 36.857zM237.714 194c0-19.714 3.714-39.143 8.571-58.286-52.039 79.534-13.531 184.571 68.858 184.571 21.428 0 42.571-7.714 60-20 2-7.429 3.714-14.857 3.714-22.572 0-14.286-6.286-21.428-20.572-21.428-4.571 0-9.143.857-13.429 1.714-63.343 12.668-107.142 3.669-107.142-63.999zm-41.142 254.858c0-11.143-8.858-20.857-20.286-20.857-11.429 0-20 9.715-20 20.857v32.571c0 11.143 8.571 21.142 20 21.142 11.428 0 20.286-9.715 20.286-21.142v-32.571zm49.143 0c0-11.143-8.572-20.857-20-20.857-11.429 0-20.286 9.715-20.286 20.857v32.571c0 11.143 8.857 21.142 20.286 21.142 11.428 0 20-10 20-21.142v-32.571zm49.713 0c0-11.143-8.857-20.857-20.285-20.857-11.429 0-20.286 9.715-20.286 20.857v32.571c0 11.143 8.857 21.142 20.286 21.142 11.428 0 20.285-9.715 20.285-21.142v-32.571zm49.715 0c0-11.143-8.857-20.857-20.286-20.857-11.428 0-20.286 9.715-20.286 20.857v32.571c0 11.143 8.858 21.142 20.286 21.142 11.429 0 20.286-10 20.286-21.142v-32.571zM421.714 286c-30.857 59.142-90.285 102.572-158.571 102.572-96.571 0-160.571-84.572-160.571-176.572 0-16.857 2-33.429 6-49.714-20 33.715-29.714 72.572-29.714 111.429 0 60.286 24.857 121.715 71.429 160.857 5.143-9.714 14.857-16.286 26-16.286 10 0 19.428 5.714 24.571 14.286 5.429-8.571 14.571-14.286 24.858-14.286 10 0 19.428 5.714 24.571 14.286 5.429-8.571 14.857-14.286 24.858-14.286 10 0 19.428 5.714 24.857 14.286 5.143-8.571 14.571-14.286 24.572-14.286 10.857 0 20.857 6.572 25.714 16 43.427-36.286 68.569-92 71.426-148.286zm10.572-99.714c0-53.714-34.571-105.714-92.572-105.714-30.285 0-58.571 15.143-78.857 36.857C240.862 183.812 233.41 254 302.286 254c28.805 0 97.357-28.538 84.286 36.857 28.857-26 45.714-65.714 45.714-104.571z" />
				</svg>
			);
		}
	}
}

export default SocialIcons;