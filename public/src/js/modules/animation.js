const toggleAnimation = (paramObj = {
    item: 'body',
    class: 'null',
    show: true,
    type: 'transitionend',
    callback: false
}) => {
    const setAfterAnimationClass = () => {
        $(paramObj.item).removeClass(paramObj.class + '-before').removeClass(paramObj.class);
        $(paramObj.item).off(paramObj.type, setAfterAnimationClass)
        if (paramObj.callback) {
            paramObj.callback()
        }
    }

    $(paramObj.item).addClass(paramObj.class + '-before');
    if (paramObj.show) {
        $(paramObj.item).toggle();
    }
    $(paramObj.item).on(paramObj.type, setAfterAnimationClass)
    $(paramObj.item).addClass(paramObj.class);
}
    