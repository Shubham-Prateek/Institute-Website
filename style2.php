<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&display=swap');

*{		
	padding: 0;
	margin:0;
	box-sizing: border-box;

	list-style: none;
	text-decoration: none;
}

html{
	font-size: 10px;
	font-family: 'Montserrat', sans-serif;	
	right-overflow: hidden;
}


/* menu */

#menu .containermenu{
	height: 80px;
	width: 100%;
	background: #34495e;
	position: fixed;
	z-index: 4;
}
#menu #imag{
	padding-top: 2px; 
	padding-bottom: 0px;
	margin-left: 40px;
	height: 80px;
	width: 80px;
}
#menu ul{
	float: right;
	margin-right: 40px;
}
#menu li{
	display: inline-block;
	margin-right: 0 8px;
	line-height: 80px;
	padding-left: 40px;
 }
#menu a{
	color: white;
	font-size: 18px;
	text-transform: uppercase;
	border: 1px solid red transparent;
}
#menu a.active,#menu a:hover{
	border: 1px none ;
	color: #3498db;

	transition: .5s;

}
#menu i{
	color: white;
	line-height: 80px;
	float: right;
	margin-right: 40px;
	cursor: pointer;

}
@media (min-width: 681px)
{
	#menu i{
		display: none;
	}
}
@media (max-width: 1000px)
{
	
	#menu ul{
		margin-right: 20px;
	}
	#menu a{
		font-size: 17px;
	}
}
@media (max-width: 680px)
{
	#menu ul{
		position: fixed;
		width: 100%;
		height: 100vh;
		background: #2d3640;
		top: 80px;
		text-align: center;
		z-index: 3;
		transition: all .5s;
		display: block;


	}
	
	#menu li{
		display: block;
		margin: 50px 0;
		line-height: 40px;

	}
	#menu a{
		font-size: 20px;
	}
	#menu a.active{
		border: none;
		color: #3498db;
	}


	 #menu a:hover{
		border: none;
		color: #3498db;
	}
	#menu ul {
		left: 100%;
		transition: .5s;
	}

	
}




/*1st*/
#bttop{
	right: 10px;
	bottom: 10px;
	position: fixed;
	cursor: pointer;
	z-index: 2;
	box-shadow: 20px;
	height: 50px;
	width: 50px;
	border-radius: 50%;
	border: none;

}
#bttop:active{
	color: red;
	box-shadow: green 5px;
	background-color: blue;
}

#s1{

	background-image: url(./img/103.jpg);
	background-size: cover;
	background-position: top center;
	position: relative;
	height: 100%;
	min-height: 100vh;
	width: 100%;
	z-index: 1;

		
}



#s1::after{
	content: '';
	position: absolute;
	background-color: black;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	opacity: .7;
	z-index: -1;
}
#s1 #s1d1{
	margin-top: 50px;
	align-items: center;
	max-width: 1200px;
	justify-content: flex-start;
	margin: 0 auto;
	padding: 160px 0px;


}

#s1 .s1dd1{
	letter-spacing: 0;
	max-width: 1200px;
	margin: 10%;
	padding-left: 20%;
	align-items: center;h 
} 
#s1 .s1dd2{
	align-items: center;
	position: relative;
	margin: 10%;
}
#s1 a{
	
}

#s1 h1{
	max-width: 1200px;
	display: black;
	display: table;
	font-size: 4rem;
	position: relative;
	color: white;
	
	animation: animate 1.5s linear infinite;
}

@keyframes animate{
	0%{
		color: #fff;
		text-shadow: 1 0 1px #03bcf4;
	}
	50%{
		color: #fff;
		text-shadow: 0 0 10px #03bcf4;
	}
	100%{
		color: #fff;
		text-shadow: 1 0 1px #03bcf4;
	}

}




.btn{
	text-decoration: none;
	display: inline-block;
	padding: 10px 30px;
	color: red;
	background-color: transparent;
	font-size: 10px;
	border: solid;
	letter-spacing: 3px;
	transition: .3s ease background-color;
	transition-property: backgroung-color,color;	
	
	margin:0 auto;
}


#s1 .btn:hover{
	color: white;
	border-color: red;
	background-color: red;

}


/* one end */


#s2{


	background-image: url(./img/14.jpg);
	background-size: cover;
	background-position: top center;
	position: relative;
	z-index: 0;
	height: content;
	min-height: 110vh;
	width: 100%;

		
}
#s2 .ser



.cource{
	text-align: center;
	padding-top: 5px;
	font-size: 30px;
	color:#b3fff5;


}
.service{
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}
.title{
	text-align: center;
	color: #ddd;
	text-transform: uppercase;
	font-size: 20px;
}
.inner{
	
}
#s2.cource{
	text-align: center;
	padding-top: 5px;
	font-size: 30px;
	color:#b3fff5;
}
.service{
	max-width: 40%;
	padding-top: 10px;
	text-align: center;
}
/* two end */


/* two dummy */












#s21 .container{
	max-width: 70%;
	margin: auto;
	background-color: #334547;
	padding: 20px 20px 20px 20px;
	border-radius: 2%;
	height: 500px;
	overflow-y: scroll;
}
#s21 h1{
	text-align: center;
	padding-top: 5px;
	font-size: 30px;
	color:#b3fff5;
}
ul{
	list-style: none;

}
#s21{
	background-color: #24262b;
	padding: 70px 0;

	box-sizing: border-box;
}
#s21 .row{
	display: flex;
	flex-wrap: wrap;
}
#s21 .column{
	width: 25%;
	padding: 25px 25px;
}
#s21 h2{
	font-size: 15px;
	color: #ffffff;
	margin-bottom: 20px;
	font-weight: 500;
	position: relative;
}
#s21 h2::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;

}

#s21 .column ul li a{
	color: #bbbbbb;
	text-decoration: none;
	display: block;
	font-weight: 300;
	font-size: 12px;
	margin-bottom: 10px;
}
#s21  a:hover{
	padding-left: 10px;
	transition: 0.5s;
}
#s21 .social{
	display: inline-block;
	height: 30px;
	width: 30px;
	background-color: rgba(255,255,255,0.2);
	margin-right: 0 10px 10px 0; 
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #bbbbbb;
	transition: all 0.5s ease;

}
.social:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 760px){
	#s21 .column{
		width: 50%;
		margin-bottom: 30px;
	}
}
@media(max-width: 560px){
	#s21 .column{
		width: 100%;
	}
}

@media screen and(max-width: 300px)
{

}


/* two dummy end */



/* third  */
#s3{

	background-color: #181a1c;
	background-size: cover;
	position: relative;
	z-index: 1;
	height: auto;
	min-height: 100vh;
	width: 100%;
	align-items: center;
	overflow: hidden;
	justify-content: center;

		
}
#s3::after{
	content: '';
	position: absolute;
	background-color: black;
	top: 0;
	left: 0;
	overflow: hidden;
	height: 100%;
	width: 100%;
	opacity: .4;
	z-index: -1;
}
#s3 h1{
	text-align: center;
	padding-top: 5px;
	font-size: 30px;
	color:#b3fff5;
}
#s3 .row{
	display: flex;
	width: 2350px;
	transition: 0.5s;
}
#s3 .column{
	width: 600px;
	height: 600px;
	position: relative;
}
#s3 .image{
	position: absolute;
	top: 0;
	right: 0;
	height: 100%;
}
#s3 .image img{
	height: 100%;
	border-radius: 10px;
}
#s3 .text{
	background: #2d3a59;
	width: 400px;
	height: 270px;
	position: absolute;
	left: 10%;
	top: 10%;
	transform: translate(30%);
	border-radius: 10px;
	color: #d3d4d6;
	padding: 45px;
	box-sizing: border-box;
	z-index: 0;
}
#s3 #container{
	overflow: hidden;
	width: 700px;
	height: 400px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
#s3 .indicator{
	position: absolute;
	left: 50%;
	transform:translate(-50%);
	bottom: 50px;
	z-index: 1;
}
.testimonial{
	width: 100%;
	height: 100%;
	overflow: hidden;

}
#s3 .btn2{
	display: inline-block;
	height: 15px;
	width: 15px;
	margin-top: 8px;
	border-radius: 15px;
	background: #ffff;
	z-index: 1;
	cursor: pointer;
	transition: 0.5s;

}
#s3 .btn2:hover{
	color: white;
	border-color: #f0fffd;
	background-color: #f0fffd;
}
#s3 .btn2:active{
	background-color: #66ffeb;



}

#s3 .active{
	width: 30px;

}

/* third end*/


#fourth{

	background-color: #202226;
	background-size: cover;
	background-position: top center;
	position: relative;
	z-index: 1;
	margin-left: 10px
	height: auto;
	min-height: 80vh;
	width: 100%;
	display: flex;
	justify-content: center;

		
}
#fourth::after{
	content: '';
	position: absolute;
	background-color: black;
	display: flex;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	opacity: .4;
	z-index: -1;
}




/*footer start*/

.footer .container{
	max-width: 70%;
	margin: auto;
	background-color: black;
	padding: 20px 20px 20px 20px;
	border-radius: 2%;
}
ul{
	list-style: none;

}
.footer{
	background-color: #24262b;
	padding: 70px 0;

	box-sizing: border-box;
}
.footer .row{
	display: flex;
	flex-wrap: wrap;
}
.footer .column{
	width: 25%;
	padding: 0 25px;
}
.footer h2{
	font-size: 15px;
	color: #ffffff;
	margin-bottom: 20px;
	font-weight: 500;
	position: relative;
}
.footer h2::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;

}

.footer .column ul li a{
	color: #bbbbbb;
	text-decoration: none;
	display: block;
	font-weight: 300;
	font-size: 12px;
	margin-bottom: 10px;
}
.footer  a:hover{
	padding-left: 10px;
	transition: 0.5s;
}
.footer .social{
	display: inline-block;
	height: 30px;
	width: 30px;
	background-color: rgba(255,255,255,0.2);
	margin-right: 0 10px 10px 0; 
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #bbbbbb;
	transition: all 0.5s ease;

}
.social:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 760px){
	.footer .column{
		width: 50%;
		margin-bottom: 30px;
	}
}
@media(max-width: 560px){
	.footer .column{
		width: 100%;
	}
}

@media screen and(max-width: 300px)
{

}

/* cources */
.mycource{

	background-color: #181a1c;
	background-size: cover;
	position: relative;
	z-index: 1;
	height: auto;
	min-height: 100vh;
	width: 100%;
	align-items: center;
	overflow: hidden;
	justify-content: center;

		
}
.mycource::after{
	content: '';
	position: absolute;
	background-color: black;
	top: 0;
	left: 0;
	overflow: hidden;
	height: 100%;
	width: 100%;
	opacity: .4;
	z-index: -1;
}
.mycource h1{
	text-align: center;
	padding-top: 5px;
	font-size: 30px;
	color:#b3fff5;
}
.mycource .row{
	display: flex;
	width: 2350px;
	transition: 0.5s;
}
#mycource.column{
	width: 600px;
	height: 600px;
	position: relative;
}
.mycource .image{
	position: absolute;
	top: 70px;
	right: 120px;
	height: 50%;
}
.mycource .image img{
	height: 100%;
	border-radius: 10px;
}
.mycource .text{
	background: #2d444459;
	width: 400px;
	height: 270px;
	position: absolute;
	left: 10%;
	top: 10%;
	transform: translate(30%);
	border-radius: 10px;
	color: #d3d4d6;
	padding: 45px;
	box-sizing: border-box;
	z-index: 0;
}
.mycource #container{
	overflow: hidden;
	width: 700px;
	height: 400px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}







/* registration  */
.regis{
	height: 100%;
	width: 100%;
	background: #34495e;
	background-image:  url(./img/18.jpg);
	position: fixed;
	z-index: 4;
	display: inline-block;
	padding-top: 10%;
	padding-left: 40%;
}
#submit{
	align-self: center;
}
#submit:hover
{
	background-color: grey;
	transition: .5s;
}
#home{
	align-self: center;
}
#gth
{
	
	color: black;
	background-image: url(./img/103.jpg);
	background-color: #ebebe0;
	text-shadow: 10px;
	padding-left: 4px;
	padding-right: 4px;
	padding-top: 2px;
	padding-bottom: 2px;
	border: solid .1px black;
	border-radius: 10px;

}
#gth:hover
{
	color: green;
	background-color: grey;
	transition: .5s;
}


#info{
	background: white;
	border: solid black 2px;
}
#result{
	background-color: yellow;
}
#center-div{
	background-color: black;
	border: solid black 2px;
}
#bdy{
	color: black;
	background-image: url(./img/3.jpg);
	padding-top: 20px;
	padding-left: 15%;
	background-color: black;
}
.col{
	padding-left: 10px;
}
@media(max-width: 560px){
	#bdy{
	color: black;
	padding-top: 20px;
	padding-left: 0%;
	background-color: black;
	transition: 0.5s;
}
@media(min-width: 561px){
	#bdy{
	color: black;
	padding-top: 20px;
	padding-left: 0%;
	background-color: black;
	transition: 0.5s;
}
}








}
</style>


