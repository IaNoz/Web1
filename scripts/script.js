/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function countdown(){
    // Set the date we're counting down to
    var countDownDate = new Date("Jun 24, 2029 01:00:10").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var weeks = Math.floor(distance / (1000 * 60 * 60 * 24 * 7));
      var days = Math.floor((distance % (1000 * 60 * 60 * 24 * 7))/ (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("weeks").innerHTML = weeks + " weeks";
      document.getElementById("days").innerHTML = days + " days";
      document.getElementById("hours").innerHTML = hours + " hs";
      document.getElementById("minutes").innerHTML = minutes + " min";
      document.getElementById("seconds").innerHTML = seconds + " sec";

      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
};




// The debounce function receives our function as a parameter
const debounce = (fn) => {
  // This holds the requestAnimationFrame reference, so we can cancel it if we wish
  let frame;
  // The debounce function returns a new function that can receive a variable number of arguments
  return (...params) => {
    // If the frame variable has been defined, clear it now, and queue for next frame
    if (frame) { 
      cancelAnimationFrame(frame);
    }
    // Queue our function call for the next frame
    frame = requestAnimationFrame(() => {      
      // Call our function and pass any params we received
      fn(...params);
    });

  }; 
};


// Reads out the scroll position and stores it in the data attribute
// so we can use it in our stylesheets
const storeScroll = () => {
  document.documentElement.dataset.scroll = window.scroll;
  console.log(document.documentElement.dataset.scroll);
};
document.addEventListener('scroll', debounce(storeScroll), { passive: true });// Listen for new scroll events, here we debounce our `storeScroll` function
storeScroll();// Update scroll position for first time

var ENVIRONMENT_content = [
             "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED ...</h1> <p>how far you and the environment are connected?</p>",
            "<p>Taking into account that the environment precedes the individual:</p><p>The environment is everything that surrounds living beings and influences their development and activity physically and/or biologically.</p>",
            "<p>There are 3 study factors that allow us to study in depth the circumstancesand characteristics of the environment around us:</p><ul><li>Biotic</li><li>Abiotic</li><li>Anthropological</li></ul>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the repercussions that the fauna has on <b>your life</b>?",
            "<p>Thanks to the <b>environment</b> human beings have been able to evolve and transform to this day, being able to take <b>advantage</b> of the <b>resources</b> that it offered.</p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
        ];
var FAUNA_content = [
            "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED ...</h1> <p>how far you and the fauna are connected?</p>",
            "<p>We know as fauna, the group of animal that cohabit in the environment, being an infinity of species as well as comunities ...</p>",
            "<p>that depends fundamentally on the biotic abioticfactors that surround them.</p>",
            "<p>Today, <b>fauna</b> is one of the communities that have <b>suffered</b> the greatest direct and indirect negative <b>impact thanks to human activity</b> ...</p>",
            "<p> and at the same time it does not have a consistent defense according to its importance and function.</p>",
            "<h1>WOULD YOU DARE ...</h1><p>To <b>know more</b> about the repercussions that fauna suffers in the current world and your influence in this proces</p>",
            "<p>Animals have been able to <b>teach humans</b> to <b>be</b> more <b>humans</b></p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];
var FLORA_content = [
            "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED ...</h1> <p>how far you and the <b>flora</b> are connected?</p>",
            "<p>The flora consists of <b>all the plant apecies</b> with which we coexist</p>",
            "<p>Like the animals, it has been <b>affected directly and indirectly thanks to</b> the action of the <b>human being</b> throughout history.</p>",
            "<p>We can make a noticeable difference from:</p><ul><li><b>Authorous</b> flora, based on a natural balance</li><li><b>Cultivated</b> flora, for its use and enjoyment</li></ul>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the repercussions that flora suffers in the current world and your influence in this process?</p>",
            "<p>Correctly applying, the <b>properties</b> that we can synthesize <b>from plants</b> for differents uses, life can have many viable <b>quality options</b></p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];
var FOODNUTRITION_content = [
     "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED ...</h1> <p>about the importance of eating well and how to do it?</p>",
            "<p><b>Nutrition</b> consists of a physiological process of the body where is able to synthesize the different nutrients.</p>",
            "<p>To <b>eat</b>, on the other hand, is a gesture that came to be classified as a volunteer to which hunger refers.</p>",
            "<p>We can combine the characteristics of these <b>two aspects</b> to achieve a greater affectiveness with respect to our body and the activities we carry out</p>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the effects that good nutrition and food hve on a daily basis, with the future in perspective</p>",
            "<p>A consistent diet will make, from the <b>fed person</b>, someone with the <b>potentialto live</b></p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];
var WORSHIPBODYCARE_content = [
     "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER ASKED YOURSELF...</h1> <p>about the importance of taking care of your body?</p>",
            "<p>Already in Ancient Greece there is an impulse of fixation towards <b>how the human body is appreciated</b> and empowered ...</p>",
            "<p>and how, internally, it can be worked and modeled to give one form or another according to individual and/or collective social patterns</p>",
            "<p>The treatment of the body must be <b>from the inside to the outside and vice versa</b>...</p>",
            "<p>so both factors must be taken into account to obtain optimal results, including those already stipulated as healthy.</p>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the effects of giving your body the attention it deserves in future perspective</p>",
            "<p>Your body will always with you, so you must <b>give yourself</b> the <b>affection</b> you deserve</p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];
var INDUSTRY_content = [
     "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED...</h1> <p>how far can the industry go?</p>",
            "<p>Nature is capable of providing us with enough <b>raw materials</b> to achieve vital development .</p>",
            "<p>We use <b>applied energies</b> to achieve a final product that contains  improvements with respect to the base from which it was born</p>",
            "<p>It is something that <b>we must maintain in the most sustainable way</b>possible over time ...</p>",
            "<p>for this, we must study the smartest way to carry it out without having a <b>negative impact</b> or trying to do it as little as possible.</p>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the effects that industrial activity has on the future in a daily way?</p>",
            "<p>\"Industry can sink or trace a society\"</p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];
var  TECHNOLOGYRENEWABLEENERGIES_content = [
     "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED...</h1><p>about the importance of the technology in a society like ours and the future so prosperous that renewable energy will bring us?</p>",
            "<p>These two aspects bring together <b>facuties never seen before</b> by the human being.</p>",
            "<p>Every day more progress is made in these fields and we must take into account the <b>magnitude of the influence</b> that both can bring</p>",
            "<p>Nikola Tesla was one of the pioneers in promoting <b>free energy</b> and thanks to minds like his one...</p>",
            "<p>today, we can enjoy methods that generate energy without prior consumption of matter and that are also more optimal for our health and the environment around us</p>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the possibilities offered by new technologies and energies in perpective for the future?</p>",
            "<p>\"Technology should spare our work, not our life.\"</p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];
var AWARENESSMENTALHEALTH_content = [
     "<h2>   WHAT IS IT?   <h2><h1>HOW DOES IT AFFECT US?<h1><h3>WHAT IS IT FOR?</h3>",
            "<h1>HAVE YOU EVER WONDERED...</h1><p>about the importance of being aware and being able to enjoy it?</p>",
            "<p>Being endowed with reason, logic, intuition and emotions (among other faculties) we should be able to<b>exploit</b> them to the fullest.</p>",
            "</p>we should be able to achieve <b>mental stability</b> powerful enough to live in harmony with ourselves and the environment around us.</p>",
            "<p>People consistent with their actions and also having <b>strong ethical values</b> could give security with their word, we must think before acting.</p>",
            "<h1>WOULD YOU DARE</h1><p> to <b>know more</b> about the benefits of having good menthal health</p>",
            "<p>\"The peace of <b>the soul will be reflected in the body</b> that carries it, a free spirit can never be caged.\"</p>",
            "<p>If you really believe that the future will <b>depend on you ...</b></br>do not lose sight of us</p>",
            "<p> we will inform you about the issues that affect you directly and how to try to reduce them, to be and <b>be better</b> with yourself and what you love</p>",
            "<h1>DO YOU ACCEPT <b>OUR CHALLENGE</b>?</h1><p>more info</br>www.as2studio.com</p>",
            "<h1>THANKS TO EVERY SINGLE PERSON</h1><p>Who fights to make this a better place to live</p><p><b>-we are proud of you-</b></p>",
            "<h1>-your choise our future-</h1>"
];

var MEDIOAMBIENTE_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>hasta qué punto el medio y tú estáis conectados?</p>",
            "<p>Teniendo encuenta que <b>el medio precede al individuo</b>, </p><p>éste se puede denominar como todo lo que rodea a los seres vivos en influye en su desarrollo y actividad de manera física y/o biológica</p>",
            "<p>Encontramos 3 factores de estudio con lo que podremos comprender en profundidad <b>las circumstancias y caracteristicas</b> del medio:</p><ul><li>BIÓTICO</li><li>ABIÓTICO</li><li>ANTROPOLÓGICO</li></ul>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de as repercusiones que tiene el medio ambiente en <b>tu vida</b>?",
            "<p>Gracias al <b>medio ambiente</b> el ser humano ha sido capaz de evolucionar y transformarse hasta el día de hoy, pudiendo <b>aprovechar</b> los <b>recursos</b> que éste ofrecía.</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
        ];
var FAUNAESP_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>hasta qué punto la funa y tú estáis conectados?</p>",
            "<p>conocemos como fauna al conjunto de animales que co-habitan en el medio siendo una infinidad de especies así como de comunidades...</p>",
            "<p>que dependen fundamentalmente de los factores bióticos y abióticos que les rodean</p>",
            "<p>Al día de hoy la fauna es una de las comunidades que <b>mayor impacto negativo</b> directo e indirecto ha sufrido por causa de la <b>actividad humana</b></p>",
            "<p> A la vez, ésta no cuenta con una defensa consecuente según su importancia y funcion</p>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de as repercusiones que sufre la fauna en el mundo actual y <b>tu influencia</b> en ese proceso?",
            "<p>\" Los animales han sido capaces de <b>enseñar al ser humano</b> a <b>ser más humano</b>\".</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"];

var FLORAESP_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>hasta qué punto la flora y tú estáis conectados?</p>",
            "<p>La flora consta de <b>todas las especies de plantas</b> con las que coexistimos.</p>",
            "<p>Al igual que los animales, ésta ha sido <b>afectada de manera directa o indirecta</b>, en manera negativa por la acción humana</p>",
            "<p>Podemos hacer una notoria diferencia entre:</p><ul><li>Flora <b>autóctona</b>, basada en una armonía natural.</li><li>Flora <b>cultivada</b>, producida para el consumo.</li>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de las repercusiones que sufre la flora en el mundo actual y <b>tu influencia</b> en ese proceso?",
            "<p>\"Aplicando correctamente las <b>propiedades</b> que podemos sintetizar <b>de las plantas</b> para los diferentes usos. La vida puede tener muchas opciones de <b>calidad viable</b>\"</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
];
var ALIMENTACIONYNUTRICION_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>acerca de la importancia de alimantarse y nutrirse bien y cómo hacerlo?</p>",
            "<p>La <b>nutricion</b> consta de un <b>proceso fisiológico</b> por el cual el cuerpo de un ser vivo es capaz de <b>sintetizar</b> los diferentes <b>nutrientes</b>.</p>",
            "<p> los <b>nutrientes</b> que un alimento le aporta al cuerpo son transformados en energía, fibras, etc.</p>",
            "<p>La <b>alimentacion</b>, por otro lado, es un gesto llegado a ser catálogado como voluntario, al cual hace <b>referencia el hambre</b></p>",
            "<p>Estos dos aspectos son imprescindibles para una vida saludable, </p>",
            "<p>poder aunar las caracteristicas de ambos para lograr una mayor efectividad con respecto a nuestro organismo y las actividades que realizamos, pensamos que ha de ser explotado en el mejor de los modos</p>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de los efectos que tienen a diario una buena alimentación y nutrición en perspectiva hacia el futuro?",
            "<p>\"Una <b>Alimentación consecuente</b> hará del alimentado alguien el <b>potencial para vivir</b>\"</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
];
var CULTODELCUERPO_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>acerca de la importancia de cuidar tu cuerpo?</p>",
            "<p>Ya en la Antigua Grecia existía un impulso de fijación hacia <b>cómo el cuerpo humano se apreciaba y potenciaba ...</p>",
            "<p> y como de manera interna se podia trabajar y modelar para dar una forma u otra según patrones individuales y colectivos sociales</p>",
            "<p>El tratamiento del cuerpo ha de ser desde el interior hacia e exterior y viceversa, por lo que se han de tenre en cuenta ambos factores pa obtener unos resultados óptimos incuyendo los y estipulados como saludables.</p>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de los efectos que tiene a diario dar a tu cuerpo la atención que merece en perspectiva hacia el furturo?",
            "<p>\"Tu cuerpo te acompañara siempre, por lo que debes <b>darte el cariño que mereces</b>.\"</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
];
var INDUSTRIA_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>con qué fin se generó a industria?</p>",
            "<p>La naturaleza nos ofrece <b>materias primas suficientes</b> para lograr un desarrollo vital, y nosotros somos capaces de <b>transformarlas</b>.</p>",
            "<p>Mediante la utilizacion de energias aplicadas, como pueden ser las maquinas o las personas, es posible crear un producto final optimizado</p>",
            "<p>Debemos de <b>mantener este proceso sostenible en el tiempo</b> y para ello hay que estudiar la forma más eficiente de llevarlo a cabo</p>",
            "<p>El objetivo ha de ser limitar las repercuciones negativas de la Industria en la medida de lo posible</p>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de los efectos que tienen a diario la actividad industrial en perspectiva hacia el futuro?</p>",
            "<p>\"La industria puede hundir o remontar una sociedad.\"</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
];
var  TECNOLOGIAYENERGIASRENOVABLES_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>acerca de la importancia de la tecnología en una sociedad como la nuestra y el futuro que nos proporcionarán las energias renovables?</p>",
            "<p>Ambos aspectos reunen a dia de hoy facultades inimaginables para el ser humano; debemos de tener en cuenta la magnitud de la influencia que ambas traen consigo y ser consecuentes con el potencial que ofrecen. tanto positivo como negativo</p>",
            "<p>Tesla fue uno de los pioneros en promover la energía libre y gracias a mentes como la suya, hoy podemos disfrutar de metodos que generan energía sin un consumo previo de materia.</p>",
            "<p>Además es más óptimo para nuestra salud y el medio que nos rodea</p>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de las posibilidades que ofrecen las nuevas tecnologias y energias en perspectiva hacia el futuro?",
            "<p>\"La tecnología debería de ahorrarnos trabajo, no vida.\"</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
];
var CONCIENCIAYCALIDADMENTAL_content = [
            "<h2>  ¿QUÉ ES?   <h2><h1>¿CÓMO NOS AFECTA?<h1><h3>¿PARA QUÉ SIRVE?</h3>",
            "<h1>¿ALGUNA VEZ TE HAZ PREGUNTADO...</h1> <p>acerca de la importancia de ser consciente y poder disfrutarlo?</p>",
            "<p>Estos dos aspectos son imprescindibles para una <b>vida saludable</b>, y el hecho de poder aunar ambas para lograr una efectividad en su plenitud es simplemente <b>una maravilla</b></p>",
            "<p>Estando dotados de <b>razón, lógica, intuición y emociones</b> (entre otras facultades) de beriamos de ser capaces de poder explotarlas al máximo</p>",
            "<p>El objetivo es alcanzar una <b>estabilidad mental</b> lo suficientemente potente como para vivir <b>en armonía</b> con nosotros mismos y el medio que nos rodea.</p>",
            "<h1>¿TE ATREVERÍAS... </h1><p> a <b>conocer más</b> acerca de los efectos que puede acarrear no disfrutar de una <b>calidad mental óptima</b>?</p>",
            "<p>\"La <b>tranquilidad del alma</b> se verá reflejada en el cuerpo que la parte, un alma libre <b>nunca podrá ser enjaulada</b>.\"</p>",
            "<p>Si realmente crees que <b>de ti depende </b> cómo sera el futuro </br>no nos pierdas de vista</p>",
            "<p> Te informaremos sobre los temas que te afectan de manera directa y cómo afrontarlos para estar y <b>ser mejor</b> contigo mismo y con lo que amas</p>",
            "<h1>TE ATREVES A ACEPTAR <b>NUESTRO RETO</b>?</h1><p>más información</br>www.as2studio.com</p>",
            "<h1>GRACIAS A TODAS Y CADA UNA DE LAS PERSONAS</h1><p>que luchan por hacer de éste un logar mejor para la vida</p><p><b>-Estamos orgullosos de vosotros-</b></p>",
            "<h1>-Tu elección, nuestro futuro-</h1>"
];

class slider {
    constructor(topic_id){
        this.slide_content = [];

        switch (topic_id){
            case "ENVIRONMENT": this.slide_content = ENVIRONMENT_content.slice();
                break;
            case "FAUNA": this.slide_content = FAUNA_content.slice();
                break;
            case "FLORA": this.slide_content = FLORA_content.slice();
                break;
            case "FOODNUTRITION": this.slide_content = FOODNUTRITION_content.slice();
                break;
            case "WORSHIPBODYCARE": this.slide_content = WORSHIPBODYCARE_content.slice();
                break;
            case "INDUSTRY": this.slide_content = INDUSTRY_content.slice();
                break;
            case "TECHNOLOGYRENEWABLEENERGIES": this.slide_content = TECHNOLOGYRENEWABLEENERGIES_content.slice();
                break;
            case "AWARENESSMENTALHEALTH": this.slide_content = AWARENESSMENTALHEALTH_content.slice();
                break;
            case "MEDIOAMBIENTE": this.slide_content = MEDIOAMBIENTE_content.slice();
                break;
            case "FAUNAESP": this.slide_content = FAUNAESP_content.slice();
                break;
            case "FLORAESP": this.slide_content = FLORAESP_content.slice();
                break;
            case "ALIMENTACIONYNUTRICION": this.slide_content = ALIMENTACIONYNUTRICION_content.slice();
                break;
            case "CULTODELCUERPO": this.slide_content = CULTODELCUERPO_content.slice();
                break;
            case "INDUSTRIA": this.slide_content = INDUSTRIA_content.slice();
                break;
            case "TECNOLOGIAYENERGIASRENOVABLES": this.slide_content = TECNOLOGIAYENERGIASRENOVABLES_content.slice();
                break;
            case "CONCIENCIAYCALIDADMENTAL": this.slide_content = CONCIENCIAYCALIDADMENTAL_content.slice();
                break;
        }
        this.content_text = document.querySelector(".topic-intro-content .text");
        var array_btn = [];
        var that = this;
        var i;
        for (i = 0; i < this.slide_content.length; i++) {
            let btn = new selecBtn(i);
            let selector_wrp = document.getElementById("slide-selector");
            selector_wrp.appendChild(btn.getElement());
            btn.getElement().addEventListener('click', selectSlide);
            array_btn.push(btn);
        };
        this.prev_btn = document.getElementById("prev");
        this.next_btn = document.getElementById("next");
        this.prev_btn.addEventListener('click', this.prevSlide.bind(this));
        this.next_btn.addEventListener('click', this.nextSlide.bind(this));
        this.slide_cnt = 0;
        this.slide_next = 0;
        this.time;
    };

    next(){
        var selector_btn;
        selector_btn = document.getElementById(this.slide_cnt);
        selector_btn.classList.remove("selected");
       
        if(this.slide_next < this.slide_content.length){
            if (this.slide_next >= 0 ){
                this.slide_cnt = this.slide_next;
            }
            else{
                    this.slide_cnt = (this.slide_content.length-1);
            }
            this.slide_next++;
         }
         else{
             this.slide_cnt = 0;
             this.slide_next = 1;
         };
        this.content_text.innerHTML = this.slide_content[this.slide_cnt];
         selector_btn = document.getElementById(this.slide_cnt);
         selector_btn.classList.add("selected");
         
        this.time = setTimeout(this.next.bind(this) , 7000);
    };
    prevSlide(){
           clearTimeout(this.time);
           this.slide_next = (this.slide_cnt-1);
           this.next();
     };
     nextSlide(){
           clearTimeout(this.time);
           this.slide_next = (this.slide_cnt+1);
           this.next();
     };
};


class selecBtn {
         constructor(btn_id){
                /* create input button  */
                this.inputElement = document.createElement('input');
                this.inputElement.type = "button";
                this.inputElement.setAttribute("class", "selec-btn");
                this.inputElement.setAttribute("id", btn_id);
                 
                 this.id = btn_id;
         }
         getId(){
            return this.id;
         };
         getElement(){
                return this.inputElement;
         }
};