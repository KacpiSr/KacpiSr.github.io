const moreButton = document.querySelector(
    ".category-blog__content__items__more__button"
);

const downItem = document.querySelectorAll(
    ".category-blog__content__items__item:nth-child(n + 6)"
);

const moreArrow = document.querySelector(
    ".category-blog__content__items__more__arrow"
);


if ($('.tax-categoryblog').length || $('.page-template-page-blog').length || $('.tax-tagsblog').length || $('.post-type-archive-blog').length)   {

    // moreButton.textContent = "Więcej";

    moreButton.addEventListener("click", () => {
        moreArrow.classList.toggle("active");
        moreButton.classList.toggle("active");
        downItem.forEach((item) => {
            item.classList.toggle("active");
        });

        if (
            moreButton.className ===
            "category-blog__content__items__more__button active"
        ) {
            moreButton.textContent = "Mniej";
            downItem.forEach((item) => {
                item.style.opacity = "1";
            });
        } else if (
            moreButton.className === "category-blog__content__items__more__button"
        ) {
            moreButton.textContent = "Więcej";
            downItem.forEach((item) => {
                item.style.opacity = "0";
            });
        }
    });

    const viewportWidth = window.innerWidth;
    if (viewportWidth < 767) {
        downItem.forEach((item) => {
            item.style.opacity = "1";
        });
    }

    // button opacity

    const buttonMore = document.querySelector(".category-blog__content__items__more");
    const allCategory = document.querySelectorAll(
        ".category-blog__content__items__item"
    );

    for (let i = 0; i < allCategory.length; i++) {
        if (i <= 5) {
            buttonMore.style.opacity = "0";
            buttonMore.style['pointer-events'] = "none";
            // buttonMore.style.display = "none";
        } else {
            buttonMore.style.opacity = "1";
            buttonMore.style['pointer-events'] = "auto";
            // buttonMore.style.display = "block";
        }
    }
}