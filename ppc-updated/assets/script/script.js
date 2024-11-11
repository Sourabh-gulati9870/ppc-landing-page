// Open Modal on Refresh Start
// document.addEventListener('DOMContentLoaded', function () {
//   var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
//   myModal.show();
// });

// document.addEventListener('DOMContentLoaded', function () {
//   var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
//   setTimeout(function() {
//     myModal.show();
//   }, 5000);
// });

// Open Modal on Refresh End

// read more /read less button on product Start
const button = document.querySelectorAll(".readMoreBtn");
const hiddenItems = document.querySelectorAll(".mobile-hide");

button.forEach((item) => {
  item.addEventListener("click", (e) => {
    const hiddenElements = item.parentNode.parentNode.querySelectorAll(
      ".mb-hidden-props"
    );

    hiddenElements.forEach((eleHidden) => {
      eleHidden.classList.toggle("mobile-hide");
    });

    const isHidden = hiddenElements[0].classList.contains("mobile-hide");
    item.textContent = isHidden ? "See more" : "Close";
  });
});
// read more /read less button on product End

// Property Images Slide Start
const swiper = new Swiper(".swiper", {
  autoplay: {
    delay: 4000
  },
  direction: "horizontal",
  loop: true,
  pagination: {
    el: ".swiper-pagination"
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  scrollbar: {
    el: ".swiper-scrollbar"
  }
});
// Property Images Slide End

// Read more button Start
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
// Read more button End


// FAQ JSON DATA Start
const faq = {
  "@context": "https://schema.org",
  "@type": "FAQPage",
  mainEntity: [
    {
      "@type": "Question",
      name: "In which sector residential apartments are available in Noida?",
      acceptedAnswer: {
        "@type": "Answer",
        text:
          "There are various sectors. Some prominent ones are: sector 75, Sector 76, Sector 78, sector 100, Sector 105 and sector 110"
      }
    },
    {
      "@type": "Question",
      name: "What is the average price of 2BHK apartment in Noida?",
      acceptedAnswer: {
        "@type": "Answer",
        text:
          "Average pricing of 2BHK in Noida is between 50 Lakh to 1 Crore INR"
      }
    },
    {
      "@type": "Question",
      name: "What is the pincode of Noida Sector 119?",
      acceptedAnswer: {
        "@type": "Answer",
        text: "The pincode of Sector 119 Noida is 201301."
      }
    },
    {
      "@type": "Question",
      name:
        "Who are the top builders for residential real estate investment in Noida?",
      acceptedAnswer: {
        "@type": "Answer",
        text:
          "The top builders in Noida include Godrej properties, Gulshan homz, Mahagun group, and Supertech"
      }
    },
    {
      "@type": "Question",
      name: "Why should you buy a villa in Noida?",
      acceptedAnswer: {
        "@type": "Answer",
        text:
          "Noida is a planned city that offers many advantages to people, including advanced infrastructure, a clean and green climate, and a large number of amenities. Villas in Noida are  turning out to be progressively popular as they offer a lavish, luxurious and comfortable lifestyle."
      }
    }
  ]
};

const accordionContainer = document.getElementById("accordionExample");

faq.mainEntity.forEach((item, index) => {
  const questionId = `heading${index}`;
  const collapseId = `collapse${index}`;

  const accordionItem = `
  <div class="accordion-item">
    <h2 class="accordion-header" id="${questionId}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#${collapseId}" aria-expanded="${ index === 0 }" aria-controls="${collapseId}"> ${item.name} </button>
    </h2>
  <div id="${collapseId}" class="accordion-collapse collapse ${index === 0 ? "show" : ""}" aria-labelledby="${questionId}" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <p>${item.acceptedAnswer.text}</p>
    </div>
  </div>
  </div>
  `;

  accordionContainer.insertAdjacentHTML("beforeend", accordionItem);
});

// FAQ JSON DATA End



// ------------------------

const changeTab = (id, show) => 
  document.getElementById(id)?.classList.toggle('active', show);

const addFilter = (name) => {
  const filters = document.getElementById('filters');
  if ([...filters.children].some(f => f.textContent.includes(name))) return;
  
  filters.insertAdjacentHTML('beforeend', 
    `<div class="filter">${name} 
      <span class="cross" onclick="removeFilter(this, '${name}')">×</span>
    </div>`);
  changeTab(buttonToTabMap[name], true);
};

const removeFilter = (el, name) => {
  el.parentElement.remove();
  changeTab(buttonToTabMap[name], false);
};


// Function to hide the section with the "section-to-hide" class
function hideSection() {
  const sectionToHide = document.querySelector('.section-to-hide');
  if (sectionToHide) {
    sectionToHide.style.display = 'none';
  }
}

// Attach the hideSection function to each element with the "clickable" class
document.querySelectorAll('.clickable').forEach(element => {
  element.addEventListener('click', hideSection);
});


