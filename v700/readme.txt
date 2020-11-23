Ускорение делаем

ищем по UI_CLAN_WAR_BATTLE_PAUSE_RETREAT_DESCRIPTION там ниже смотреть
//this.L8.ha((J.J().A.Mj.yD().KS() || iU.x3e.W() || ub.J().Yx()) && this.controller.Kl.Cxe.W());
this.L8.ha(true); // исправление

Подземка делаем

ищем по game.mechanics.dungeon.model.PlayerDungeonData
GTa: function () {
/*var a = this.A.Rb,
b = A.fb.Z6a().cJa().Cb().ga();
a = a.hl(t.D(b, wc) ? b : null);
return Z.Jd(a, 0)*/
return true; // исправление
}

ищем по dungeonEndBattle
//b && this.na.eb("isRaid", b)
// фикс ошибки dungeonEndBattle

Пропустить во время боя. Замена Продолжить на Отступить. А кнопку Отступить заменяю на Пропустить.

ищем по game.view.popup.battle.BattlePausePopup
//this.clip.bx.U(n.translate("UI_POPUP_BATTLE_CONTINUE"), (q = this.j, e(q, q.Zia)));
this.clip.bx.U(n.translate("UI_POPUP_BATTLE_RETREAT"), (q = this.j, e(q, q.YGb)));
//исправление Продолжить на Отступить

ищем по game.mediator.gui.popup.battle.BattlePausePopupMediator
a9d: function () {
return this.lx() && n.has("UI_POPUP_BATTLE_SKIP") ? n.translate("UI_POPUP_BATTLE_SKIP") : n.translate("UI_POPUP_BATTLE_SKIP")
/*"UI_POPUP_BATTLE_RETREAT"*/
//исправление Пропустить и Отступить на всегда Пропустить

ищем game.mechanics.playable.popup.PlayableDefeatPopup
//тест в компании 3 раза пропуск
this.clip.ta.B(n.translate("UI_DIALOG_MISSION_DEFEAT"));
this.clip.Apa.U(n.translate("UI_POPUP_BATTLE_RETREAT"), (q = this.$a(), e(q, q.YGb)));
//this.clip.eVc.U(n.translate("UI_DIALOG_PLAYABLE_BUTTON_RETRY"), (q = this.$a(), e(q, q.fUe)));
this.clip.eVc.U(n.translate("UI_DIALOG_PLAYABLE_BUTTON_RETRY"), (q = this.$a(), e(q, q.YGb)));
// исправление YGb взято значение выше

