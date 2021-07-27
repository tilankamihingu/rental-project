let indicator = document.querySelector('.indicator').children;
let products = document.querySelector('.products').children;

for(let i=0; i<indicator.length; i++)
{
    indicator[i].onclick = function(){
        for(let x=0; x<indicator.length; x++)
        {
            indicator[x].classList.remove('active');
        }
        this.classList.add('active');
        const displayItems = this.getAttribute('data-filter');
        for(let z=0; z<products.length; z++)
        {
            products[z].style.transform = 'scale(0)';
            setTimeout(()=>{
                products[z].style.display = 'none';
            },500);

            if((products[z].getAttribute('data-category') == displayItems) || displayItems == 'all'){
                products[z].style.transform = 'scale(1)';
                setTimeout(()=>{
                    products[z].style.display = '';
                },500);
            }
        }
    }
}