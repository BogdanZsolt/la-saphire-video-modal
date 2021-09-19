document.addEventListener("DOMContentLoaded", () => {
    if(document.querySelector("#video-modal")){
        const fsmodal = document.querySelector(".fullscreen-modal");
        if(fsmodal.dataset.enable) {

            const video = document.querySelector("#video-modal");
            const now = new Date()
            const ttl = Number(fsmodal.dataset.expire)*(60*1000);

            // functions
            const showVideoModal = () => {
                fsmodal.classList.add('show')
            }

            const hideVideoModal = () => {
                fsmodal.classList.remove('show');
                if (typeof Storage !== "undefined") {
                    const item = {
                        value: 'yes',
                        expiry: now.getTime(),
                    }
                    localStorage.setItem('videoModal', JSON.stringify(item));
                }
            }

            // event listener
            video.addEventListener('click', (e) =>{
                hideVideoModal();
            })

            window.addEventListener('keydown', (e)=>{
                if(!fsmodal.classList.contains('show')) { return }
                if(e.key.includes('Escape')){
                    e.preventDefault()
                    hideVideoModal()
                }
            })

            video.addEventListener("ended", () => {
                hideVideoModal();
            });

            const itemStr = localStorage.getItem('videoModal');
            if(itemStr){
                const item = JSON.parse(itemStr);
                if (item.value === "yes" && now.getTime() > item.expiry + ttl) {
                  item.value = "no";
                }
                if(item.value !== 'yes'){
                    showVideoModal();
                }
            } else {
                showVideoModal();
            }
        }
    }
});