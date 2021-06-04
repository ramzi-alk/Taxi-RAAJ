const ratio = .5
var options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}
const handleIntersect = function(entries, observer) {
    entries.forEach(function(entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        }
        entry.intersectionRatio
    })

}
const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('.reveal').forEach(function(r) {
    observer.observe(r)
})