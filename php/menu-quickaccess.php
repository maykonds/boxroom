<style>
.home-menu-quickacess {
    margin-left: auto;
    margin-right: auto;
    margin-top: 80;
    width: 85%;
    height: 160px;
    border-radius: 20px;
  }
/*
  .quadro{
    width: 1000px;
    position: relative;
    display: flex;
    justify-content: space-between;
}
*/

.home-menu-quickacess .card{
display: inline-flex;
margin-right: 5px;
margin-bottom: 5px;
}

.home-menu-quickacess .card .card{
    width: 300px;
    height: 200px;
    transition: 0.5s;
}

.home-menu-quickacess .card .card.card1{
    position: relative;
    background: #15181a;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: none;
    cursor: pointer;
}
.home-menu-quickacess .card .card.card.card1:hover {
    background: #a300ff;;
}
.home-menu-quickacess .card .card.card1 .content img{
    max-width: 90px;
}

.home-menu-quickacess .card .card.card1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
    font-family: "Calibri";
    font-weight: 100;
}

.home-menu-quickacess .card .card{
    width: 240px;
    height: 150px;
    transition: 0.5s;
    border-radius: 10px;
}


.home-menu-quickacess .card .card .content p{
    margin: 0;
    padding: 0;
}

.home-menu-quickacess .card .card .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    padding: 5px;
    border: 1px solid #333;
}

.home-menu-quickacess .card .card .content a:hover{
    background: #333;
    color: #fff;
}
</style>