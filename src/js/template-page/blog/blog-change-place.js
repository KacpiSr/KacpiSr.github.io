if ($('.post-type-archive-blog').length || $('.tax-categoryblog').length || $('.tax-tagsblog').length) {



    $(".blok-ebooks").appendTo(".new-entries__container__post-item:nth-child(9)");
    $(".blok-case-studies").appendTo(
        ".new-entries__container__post-item:nth-child(13)"
    );


    const ebooks = document.querySelector(".blok-ebooks");

    if (ebooks.parentElement.className === "new-entries__container__post-item") {
        ebooks.style.display = "block";
    } else {
        ebooks.style.display = "none";
    }

    const studies = document.querySelector(".blok-case-studies");

    if (studies.parentElement.className === "new-entries__container__post-item") {
        studies.style.display = "block";
    } else {
        studies.style.display = "none";
    }
    if ($(window).width() < 768) {
        $(".category-blog__content__items form").appendTo(".form-mobile");
    }
}
